import React from 'react';
import { createRoot } from 'react-dom/client';
import ShowData from './Components/showWorker/showWorker.jsx';
import AddEmp from './AddEmp/AddEmp.jsx';
import UpdateEmp from './UpdateEmp/updateEmp.jsx';
import {
  createBrowserRouter,
  RouterProvider,
} from "react-router-dom";

const router = createBrowserRouter([
  {
    path: "/",
    element: <ShowData/>
  },
  {
    path: "/showWorker",
    element: <ShowData/>
  },
  {
    path: "/addEmp",
    element: <AddEmp/>
  },
  {
    path: "/updateEmp/:id",
    element: <UpdateEmp />
  },
]);

createRoot(document.getElementById('root')).render(
  <RouterProvider router={router} />
);
