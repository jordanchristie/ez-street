import React, { useState, useContext } from "react";
import { TaskContext } from "../../context/TasksContext";
import { TaskInput } from "../StyledComponents";

const AddTask = () => {
  const { addTask } = useContext(TaskContext);
  const [newTask, setNewTask] = useState("");

  const submitTask = e => {
    e.preventDefault();

    addTask(newTask);

    setNewTask("");
  };
  return (
    <form onSubmit={submitTask}>
      <TaskInput
        type="text"
        value={newTask}
        onChange={e => setNewTask(e.target.value)}
      />
    </form>
  );
};

export default AddTask;
