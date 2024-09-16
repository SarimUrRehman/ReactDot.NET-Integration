import React, { useEffect, useRef } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import axios from 'axios';
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';

const UpdateEmp = () => {
  const { id } = useParams(); 
  const navigate = useNavigate();
  const nameRef = useRef(null);
  const salaryRef = useRef(null);
  useEffect(() => {
    async function fetchWorkerData() {
      try {
        console.log(`Fetching data for ID: ${id}`); // Debugging line
        const response = await axios.get(`https://localhost:7004/api/Woker/${id}`);
        console.log(response.data);
        let data = response.data;
        
        // Set specific fields in the form inputs
        nameRef.current.value = data.name;
        salaryRef.current.value = data.salary;
      } catch (error) {
        console.error('Error fetching worker data:', error);
      }
    }
    fetchWorkerData();
  }, [])

  const updateData = async () => {
    try {
      console.log(`Updating data for ID: ${id}`); // Debugging line
      const {data} = await axios.put(`https://localhost:7004/api/Woker/${id}`, {
        name: nameRef.current.value,
        salary: salaryRef.current.value
      }, {
        headers: {
          'Content-Type': 'application/json',
        },
      })
      navigate('/');
    } catch (error) {
      console.error('Error updating data:', error);
    }
  };

  return (
    <>
      <Form>
        <Form.Group className="mb-3" controlId="formBasicName">
          <Form.Label>Emp Name</Form.Label>
          <Form.Control ref={nameRef} />
        </Form.Group>

        <Form.Group className="mb-3" controlId="formBasicSalary">
          <Form.Label>Emp Salary</Form.Label>
          <Form.Control ref={salaryRef} />
        </Form.Group>

        <Button variant="primary" onClick={updateData}>
          Update
        </Button>
      </Form>
    </>
  );
};

export default UpdateEmp;
