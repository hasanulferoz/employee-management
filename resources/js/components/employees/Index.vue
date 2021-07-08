<template>
   <div>
             <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employees</h1>
    </div>
   <div class="row">
    <div class="card mx-auto">
        <div>
           
                <!-- <div class="alert alert-success">
                   
                </div> -->
          
        </div>
        <div class="card-header">
           <div class="row">
               <div class="col">
                <form>
                    <div class="form-row align-items-center">
                      <div class="col">
                        <input type="Search" class="form-control" name="search" className="form-control mb-2" id="inlineFormInput" placeholder=" search...">
                      </div>

                      <div class="col">
                       <button class="btn btn-primary btn-sm mb-2">Search</button>  
                      </div>
                    </div>
                  </form>
                 
               </div>
           </div>
           <router-link :to="{name: 'EmployeesCreate'}" 
           class="btn btn-primary btn-sm mb-2"
           >Create</router-link>
        </div>
       
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Separtment</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
               
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">Edit</a>
                        </td>
                    </tr>

               
                </tbody>
              </table>
        </div>
    </div>
   </div>
   </div>
</template>
<script>
export default {
    
}
</script>