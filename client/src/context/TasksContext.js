import React, { useState, createContext } from "react";

export const TaskContext = createContext();

export const TaskContextProvider = props => {
  const [tasks, setTasks] = useState([
    { id: 1, task: "brush your teeth" },
    { id: 2, task: "feed your fish" },
    { id: 3, task: "get dressed" }
  ]);

  const addTask = newTask => {
    setTasks([...tasks, { id: tasks.length + 1, task: newTask }]);
  };

  return (
    <TaskContext.Provider value={{ tasks, setTasks, addTask }}>
      {props.children}
    </TaskContext.Provider>
  );
};
