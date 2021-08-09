<?php

class Job
{
  private String $role;
  private int $salary;
  private int $id;

  public function getRole(): String
  {
    return $this->role;
  }
  public function setRole(String $role): void
  {
    $this->role = $role;
  }

  public function getSalary(): int
  {
    return $this->salary;
  }
  public function setSalary(int $salary): void
  {
    $this->salary = $salary;
  }
  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }
}
