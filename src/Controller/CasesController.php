<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;

class CasesController extends AppController
{
    public function index()
    {
        $cases = $this->paginate($this->Cases);

        $this->set(compact('cases'));
    }

    public function add()
    {
        $case = $this->Cases->newEmptyEntity();

        if($this->request->is(['post', 'put'])){
            $this->Cases->patchEntity($case, $this->request->getData());
            if($this->Cases->save($case)){
                $this->Flash->success(__('The case has been saved.'));
                $this->redirect(['action' => 'view', $case->id]);
            }
            $this->Flash->warndi(__('The case could not be saved.'));
        }
        $this->set(compact('case'));
    }

    public function view($id)
    {


    }

    public function edit($id)
    {

    }

    public function delete($id)
    {

    }
}