import { Injectable } from '@angular/core';
//  import { HttpClient } from 'selenium-webdriver/http';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';
import { Person } from './person';

@Injectable()
export class ContactsService {

  constructor(private httpclient:HttpClient) {}
    getCntcts():Observable<Person[]>{
      return this.httpclient.get<Person[]>("http://localhost/pcs/hw103/contacts/src/app/getContacts.php");
   }

}
