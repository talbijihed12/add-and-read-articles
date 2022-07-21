import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup, Validators} from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';
import { ToastrManager } from 'ng6-toastr-notifications';

@Component({
  selector: 'app-backend',
  templateUrl: './backend.component.html',
  styleUrls: ['./backend.component.css']
})
export class BackendComponent implements OnInit {
  

    dataForm :FormGroup;
    fetchdata;
    errorMsg;

    constructor(private frmbuilder: FormBuilder,private http: HttpClient,private router: Router,private toastr: ToastrManager) {}

    ngOnInit() {
        this.dataForm = this.frmbuilder.group({
          title: ['', Validators.compose([Validators.required, Validators.maxLength(15), Validators.minLength(1)])],
          image: ['', [Validators.required, Validators.email]],
          headerImage: new FormControl('', [Validators.required, Validators.minLength(8)]),
          introduction: new FormControl(''),
          description: new FormControl('', [Validators.required, Validators.minLength(8)]),
          lastMod: new FormControl('', [Validators.required, Validators.minLength(8)]),
          language: new FormControl('', [Validators.required, Validators.minLength(8)]),
          keyWords: new FormControl('', [Validators.required, Validators.minLength(8)]),
          state: new FormControl('', [Validators.required, Validators.minLength(8)]),
          numVisit: new FormControl('', [Validators.required, Validators.minLength(8)]),
          idTheme: new FormControl('', [Validators.required, Validators.minLength(8)]),
          idUser: new FormControl('', [Validators.required, Validators.minLength(8)]),
          idHost: new FormControl('', [Validators.required, Validators.minLength(8)]),
            });

        // read data on component initialization
        this.getData();
    }

    getData(){
        this.http.get('http://localhost/testapp/php_files/PHP/read.php').subscribe(
            data => {
                this.fetchdata = data;
                console.log('Data fetched is successful ', data);
            },
            error => {
                console.log('Error', error);
                this.errorMsg = error;
            }
        );
    }
    PostData(dataForm: any) {
        this.http.post('http://localhost/testapp/php_files/PHP/insert.php', dataForm).subscribe(
            data => {
                console.log('POST Request is successful ', data);
                this.getData();
                this.dataForm.reset('');
                this.showSuccess("Data Inserted :)");
            },
            error => {
                console.log('Error', error);
                this.errorMsg = error;
            }
        );
    }






    showSuccess(msg: string) {
        this.toastr.successToastr(msg, 'Success!');
    }
    showWarning(msg: string) {
        this.toastr.warningToastr(msg, 'Alert!');
    }



    loadSome() {
        this.router.navigate(['parent', 'Hii Scope']);
    }
}
