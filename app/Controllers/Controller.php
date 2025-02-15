<?php

namespace App\Controllers;

class Controller {
    protected $model;

    public function getAll() {
        $data = $this->model->all();
        $this->response($data, 200);
    }

    public function create($request) {
        if ($this->model->create($request)) {
            $this->response(['message' => 'Ressource créée avec succès.'], 201);
            return;
        }

        $this->error("Échec de la création de la ressource.", 400);
    }

    public function delete($id) {
        if ($this->model->delete($id)) {
            $this->response(['message' => 'Ressource supprimée avec succès.'], 200);
            return;
        }

        $this->error("Échec de la suppression de la ressource.", 400);
    }

    public function edite($id){
        $data = $this->model->find($id);
        $this->response($data, 200);
    }

    public function update($id, $request) {
        if ($this->model->update($id, $request)) {
            $this->response(['message' => 'Ressource mise à jour avec succès.'], 200);
            return;
        }

        $this->error("Échec de la mise à jour de la ressource.", 400);
    }

    protected function response($data, int $status = 200) {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }

    protected function error(string $message, int $status = 400) {
        http_response_code($status);
        echo $message;
        exit;
    }
}    