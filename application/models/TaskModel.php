<?php

class TaskModel extends CI_Model {
  public function getTasks() {
    $query = $this->db->get('tasks');
    return $query->result();
  }

  public function insertTask($data) {
    return $this->db->insert('tasks', $data);
  }

  public function findTask($id) {
    $query = $this->db->get_where('tasks', ['id' => $id]);
    return $query->row();
  }

  public function updateTask($id, $data) {
    return $this->db->update('tasks', $data, ['id' => $id]);
  }

  public function deleteTask($id) {
    return $this->db->delete('tasks', ['id' => $id]);
  }

  public function findTasks() {
    $this->db->select('tasks.title, workers.name');
    $this->db->from('workers');
    $this->db->join('tasks', 'tasks.id=workers.task_id');
    $query = $this->db->get();

    // $query = $this->db->query(
    //   'SELECT tasks.title, workers.name
    //   FROM workers
    //   INNER JOIN tasks ON tasks.id=workers.task_id'
    // );

    return $query->result();
  }
}