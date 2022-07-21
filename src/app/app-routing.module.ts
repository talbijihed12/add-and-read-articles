import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BackendComponent } from './backend/backend.component';



const routes: Routes = [
    { path: 'backend', component: BackendComponent },
    { path: '', redirectTo:'/backend', pathMatch:'full' },



];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
