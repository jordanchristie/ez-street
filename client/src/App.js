import React from "react";
import TaskList from "./components/TaskList";
import { TaskContextProvider } from "./context/TasksContext";
import AddTask from "./components/AddTask";

function App() {
  return (
    <div className="App">
      <TaskContextProvider>
        <header>Task List</header>
        <AddTask />
        <TaskList />
      </TaskContextProvider>
    </div>
  );
}

export default App;
