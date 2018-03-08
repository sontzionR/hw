import { Component, OnInit } from '@angular/core';
import { ContactsService } from '../shared/contacts.service';
import { Observable } from 'rxjs/Observable';
import { Person } from '../shared/person';

@Component({
  selector: 'app-contact-list',
  templateUrl: './contact-list.component.html',
  styleUrls: ['./contact-list.component.css']
})
export class ContactListComponent implements OnInit {

  constructor(private service:ContactsService) {}
  contacts:Observable<Person[]>;
  ngOnInit() {
    this.contacts = this.service.getCntcts();
  }

}
