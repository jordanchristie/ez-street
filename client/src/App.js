import React from "react";
import { createGlobalStyle } from "styled-components";
import TaskList from "./components/TaskList";
import { TaskContextProvider } from "./context/TasksContext";
import AddTask from "./components/AddTask";

const GlobalStyle = createGlobalStyle`
html, body, #root, .App {
  height: 100%;
  width: 100%;
  margin: 0;
  overflow-x: hidden;
  font-family: 'Montserrat', sans-serif;
}
`;

function App() {
  return (
    <div className="App">
      <GlobalStyle />
      <TaskContextProvider>
        <header>Task List</header>
        <AddTask />
        <TaskList />
      </TaskContextProvider>
    </div>
  );
}

export default App;
