
<?php

class Task_List {
    private array $tasks = [];
    private string $filename;

    // Constructor
    public function __construct(string $filename) {
        $this->filename = $filename;
        if (file_exists($filename)) {
            $data = file_get_contents($filename);
            $unserialized_data = unserialize($data);
            if (is_array($unserialized_data)) {
                $this->tasks = $unserialized_data;
            } else {
                $this->tasks = [];
            }
        }
    }

    // Adds task
    public function add_task(string $task_name, int $priority) {
        $task_id = uniqid();
        $this->tasks[$task_id] = ['name' => $task_name, 'priority' => $priority, 'status' => Task_Status::INCOMPLETE];
        $this->save_tasks_to_file();
    }

    // Delete task
    public function delete_task(string $task_id) {
        unset($this->tasks[$task_id]);
        $this->save_tasks_to_file();
    }

    // Returns all tasks, sorted by priority in descending order
    public function get_tasks() {
        $sorted_tasks = $this->tasks;
        usort($sorted_tasks, function($a, $b) {
            return $b['priority'] - $a['priority'];
        });
        return $sorted_tasks;
    }

    // task completed
    public function complete_task(string $task_id) {
        if (isset($this->tasks[$task_id])) {
            $this->tasks[$task_id]['status'] = Task_Status::COMPLETED;
        }
        $this->save_tasks_to_file();
    }

    // id of a task byname
    public function get_id_by_name(string $task_name) {
        foreach ($this->tasks as $task_id => $task) {
            if ($task['name'] === $task_name) {
                return $task_id;
            }
        }
        return null;
    }

    // Saves task
    private function save_tasks_to_file() {
        file_put_contents($this->filename, serialize($this->tasks));
    }
}