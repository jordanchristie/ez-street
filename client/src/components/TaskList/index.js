import React, { useContext } from "react";
import { TaskContext } from "../../context/TasksContext";

const TaskList = () => {
  const { tasks } = useContext(TaskContext);
  return (
    <div>
      {tasks.map(({ id, task }) => (
        <button key={id}>{task}</button>
      ))}
    </div>
  );
};

export default TaskList;
