<?php
namespace App\Controller;

use App\Controller\AppController;

class TagsController extends AppController
{
    public function index()
    {
        $tags = $this->Tags->find('all');
        $this->set(compact('tags'));
    }

    public function view($id)
    {
        $tag = $this->Tags->get($id);
        $this->set(compact('tag'));
    }

    public function add()
    {
        $tag = $this->Tags->newEmptyEntity();
        if ($this->request->is('post')) {
            $tag = $this->Tags->patchEntity($tag, $this->request->getData());
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('Tag saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to save tag.'));
        }
        $this->set(compact('tag'));
    }

    public function edit($id)
    {
        $tag = $this->Tags->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Tags->patchEntity($tag, $this->request->getData());
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('Tag updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update tag.'));
        }
        $this->set(compact('tag'));
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $tag = $this->Tags->get($id);
        if ($this->Tags->delete($tag)) {
            $this->Flash->success(__('Tag deleted.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
