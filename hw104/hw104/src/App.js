import React, { Component } from 'react';
import Student from './Student';
import './App.css';

class App extends Component {
  students = [
    {name:'john' ,marks:[92,92,96]},
    {name: 'bill',marks:[98,88,97]}
  ];
  render() {
    const stdnts = this.students.map(student=><li><Student student={Student.name}/><li/>)
    return (
      <div>
      </div>
    );
  }
}

export default App;
