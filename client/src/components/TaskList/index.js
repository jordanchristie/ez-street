import React, { useContext } from "react";
import { TaskContext } from "../../context/TasksContext";
import { TaskTitle, TaskListContainer, TaskButton } from "../StyledComponents";

const TaskList = () => {
  const { tasks } = useContext(TaskContext);
  return (
    <>
      <TaskTitle>EZ's Morning Routine</TaskTitle>
      <TaskListContainer>
        {tasks.map(({ id, task }) => (
          <TaskButton key={id}>{task}</TaskButton>
        ))}
      </TaskListContainer>
    </>
  );
};

export default TaskList;
