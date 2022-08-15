<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaskController extends CI_Controller {
	public function index() {
    $this->load->database();
    $this->load->model('TaskModel', 'task_model');

    $tasks = $this->task_model->getTasks();
    $data['tasks'] = $tasks;

		$this->load->view('home', $data);
	}

  public function create() {
    $this->load->view('create');
  }

  public function store() {
    $data = [
      'title' => $this->input->post('task_title'),
    ];

    $this->load->model('TaskModel', 'task_model');
    $this->task_model->insertTask($data);
    redirect(base_url('tasks/home'));
  }

  public function edit($id) {
    $this->load->model('TaskModel', 'task_model');
    $data['task'] = $this->task_model->findTask($id);

    $this->load->view('edit', $data);
  }

  public function update($id) {
    $data = [
      'title' => $this->input->post('task_title'),
    ];

    $this->load->model('TaskModel', 'task_model');
    $this->task_model->updateTask($id, $data);
    redirect(base_url('tasks/home'));
  }

  public function delete($id) {
    $this->load->model('TaskModel', 'task_model');
    $this->task_model->deleteTask($id);
    redirect(base_url('tasks/home'));
  }

  public function test() {
    $this->load->model('TaskModel');

    $data['tasks'] = $this->TaskModel->findTasks();

    $this->load->view('test', $data);
  }
}
