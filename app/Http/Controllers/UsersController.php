<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as UserRequest;
use App\Http\Models\User;
use App\Http\Models\Department;
use App\Http\Models\Office;

class UsersController extends Controller
{
    /**
     * Show the users page.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     * @throws \InvalidArgumentException
     */
    public function index(UserRequest $request)
    {
        try {
            $data = [];
            if (null !== $request->return && intval($request->return) === 1) {
                $data['message'] = 'Usuário salvo com sucesso';
            } elseif (null !== $request->return && intval($request->return) === 0) {
                $data['message'] = 'OPS! Ocorreu um erro inesperado. Tente novamente.';
            } elseif (null !== $request->return && intval($request->return) === -1) {
                $data['message'] = 'Usuário removido com sucesso.';
            }

            if ($search = $request->post('search')) {
                $users = User::where('email', 'LIKE', "%$search%")->get()->toArray();
            } else {
                $users = User::get()->toArray();
            }
        } catch (\Exception $e) {
            if ($e->getCode() === '42S02') {
                $data['message'] = 'A tabela `users` ainda não existe. Execute a migration para criá-la.';
                $users = [];
            }
        }

        return view('users.index', compact('users', 'data'));
    }

    /**
     * Show the users create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Show the users store create.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $user = new User();
            $user->email = $request->get('email');
            $user->password = crypt($request->get('password'), '$2a$08$Cf1f11ePArKlBJomM0F6aJ$');
            $user->save();

            if ($user->wasRecentlyCreated) {
                $return = '1';
            } else {
                $return = '0';
            }
        } catch (\Exception $e) {
            $return = '0';
        }

        return redirect("/users?return={$return}");
    }

    /**
     * Show the users edit page.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        
        return view('users.edit', compact('data'));
    }

    /**
     * Show the users edit page.
     *
     * @param UserRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, int $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->email = $request->get('email');
            if ($request->has('password')) {
                $user->password = crypt($request->get('password'), '$2a$08$Cf1f11ePArKlBJomM0F6aJ$');
            }

            $user->save();

            if ($user->getChanges()) {
                $return = '1';
            } else {
                $return = '0';
            }
        } catch (\Exception $e) {
            $return = '0';
        }

        return redirect("/users?return={$return}");
    }

    /**
     * Show the users edit page.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            if (! User::find($id)) {
                $return = '-1';
            } else {
                $return = '0';
            }
        } catch (\Exception $e) {
            $return = '0';
        }

        return redirect("/users?return={$return}");
    }
}
