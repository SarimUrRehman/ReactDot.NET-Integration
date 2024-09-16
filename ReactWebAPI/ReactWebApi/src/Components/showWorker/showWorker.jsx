import React, { useEffect, useState } from 'react';
import {  useNavigate } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.min.css';
import axios from 'axios';
import Table from 'react-bootstrap/Table';
import Container from 'react-bootstrap/Container';
import Button from 'react-bootstrap/Button';


function ShowData() {
  const [data, fetchData] = useState([]);
  const navigate = useNavigate();

  useEffect(() => {
    async function GetUser() {
      try {
        const response = await axios.get('https://localhost:7004/api/Woker');
        console.log(response.data);
        fetchData(response.data);
      } catch (error) {
        console.error(error);
      }
    }
    GetUser();
  }, []);

  const RemoveData = async (id) => {
    try {
      await axios.delete(`https://localhost:7004/api/Woker/${id}`);
      fetchData(data.filter((worker) => worker.id !== id));
      console.log(`Deleted worker with id: ${id}`);
    } catch (error) {
      console.error(`Error deleting worker with id ${id}:`, error);
    }

   
  };

  const NavigateData = (id)=>{
    navigate(`/updateEmp/${id}`);
   }

  return (
    <Container>
      
      <Table striped bordered hover variant='Secondary'>
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {data.map((Worker) => (
            <tr key={Worker.id}>
              <td>{Worker.id}</td>
              <td>{Worker.name}</td>
              <td>{Worker.salary}</td>
              <td>
                <Button variant="danger" onClick={() => RemoveData(Worker.id)}>Delete</Button>
              </td>
              <td>
                <Button variant="warning" onClick={()=>NavigateData(Worker.id)}>Update</Button>
              </td>
            </tr>
          ))}
        </tbody>
      </Table>
    </Container>
  );
}

export default ShowData;
