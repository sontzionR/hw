import { Component } from '@angular/core';
import {Category} from './shared/category';
// import {Item} from './shared/item';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'HW 101';
  theCategories:Category[]=[ 
    {
      name:'mp3',
      items:[
            {
            name:'ipod',
            price:99.99
            },
            {
            name:'sansa clip',
            price:75.00
            }
        ]
    },
    {
      name:'computer',
      items:[
            {
            name:'dell',
            price:999.99
            },
            {
            name:'lenovo',
            price:75.00
            }
        ]
    },
    {
      name:'cell phone',
      items:[
            {
            name:'apple',
            price:499.99
            },
            {
            name:'kosher phone',
            price:75.00
            }
        ]
    }
  ]
};
