import styled from "styled-components";
import { pop } from "./Keyframes";

export const TaskTitle = styled.h1`
  font-size: 42px;
  text-align: center;
`;

export const TaskButton = styled.button`
  font-size: 32px;
  color: #fff;
  background: #c708cb;
  border-radius: 10px;
  padding: 1em;
  margin: 1em;
  min-width: 60%;
  font-weight: bold;

  &:hover {
    animation: ${pop}.3s ease;
  }
`;

export const TaskListContainer = styled.section`
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
`;

export const TaskInput = styled.input`
  font-size: 24px;
  padding: 0 0 5px 10px;
  border-radius: 5px;
`;
