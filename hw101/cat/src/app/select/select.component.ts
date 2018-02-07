import { Component, OnInit,Input } from '@angular/core';
import { Category } from '../shared/category';


@Component({
  selector: 'app-select',
  templateUrl: './select.component.html',
  styleUrls: ['./select.component.css']
})
export class SelectComponent implements OnInit {

  constructor() { }
       @Input ()
       categories:Category[]   
  ngOnInit() {
  }

}
