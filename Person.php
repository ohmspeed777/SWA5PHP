<?php

require('./Job.php');


class Person
{

  //composition has-a relationship
  private Object $job;

  public function __construct()
  {
    $this->job = new Job();
    $this->job->setSalary(1000);
  }

  public function getSalary(): int
  {
    return $this->job->getSalary();
  }
}
