<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        $users = $this->Users->find();
        $this->set(compact('users'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('User created.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to create user.'));
        }
        $this->set(compact('user'));
    }

    public function edit($id)
    {
        $user = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('User updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update user.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('User deleted.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
