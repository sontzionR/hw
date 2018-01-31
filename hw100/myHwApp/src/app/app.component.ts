import { Component } from '@angular/core';
import { Person } from './shared/person';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Home Work 100';


person: Person = { //variable person of type Person
  firstName: 'Donald',
  lastName: 'Trump',
  address:{
     street: 'pennsylvania ave',
  city: 'washington',
  zip:'111zzz'
  }
};
}
