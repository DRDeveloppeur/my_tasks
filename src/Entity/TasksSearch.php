<?php
namespace App\Entity;

class TasksSearch {

    /**
     * @var string|null
     */
    private $status;

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return TasksSearch
     */
    public function setStatus(string $status): TasksSearch
    {
        $this->status = $status;
        return $this;
    }

}
