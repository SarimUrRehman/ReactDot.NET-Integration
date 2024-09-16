import React, { useRef } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import axios from 'axios';
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';

const AddEmp = () => {
  const empName = useRef(null);
  const empSalary = useRef(null);

  const navigate = useNavigate();

  const postData = async (event) => {
    event.preventDefault(); // Prevents the default form submission behavior

    try {
      const response = await axios.post('https://localhost:7004/api/Woker', {
        name: empName.current.value,
        salary: empSalary.current.value,
      }, {
        headers: {
          'Content-Type': 'application/json',
        },
      });

      navigate('/')
       
      console.log('API Response:', response.data);
    } catch (error) {
      console.error('Error posting data:', error);
    }
  };

  return (
    <Form >
      <Form.Group className="mb-3" controlId="formBasicEmail">
        <Form.Label>Emp Name</Form.Label>
        <Form.Control type="text" ref={empName} />
      </Form.Group>

      <Form.Group className="mb-3" controlId="formBasicSalary">
        <Form.Label>Emp Salary</Form.Label>
        <Form.Control type="number" ref={empSalary} />
      </Form.Group>

      <Button variant="primary" type="submit" onClick={postData}>
        Submit
      </Button>
    </Form>
  );
};

export default AddEmp;
