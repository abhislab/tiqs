 <?php include_once('template/header.php'); ?>  
 <!--Header--> 
<section class="border"> 
<div class="row">
   <div class="col-md-6 col-12">
      <h2 class="h4 f-bold"><strong>TIQS : Ticketing Visitors</strong></h2>
   </div>
   <div class="col-md-6 col-12 pe-0">
      <div class="d-flex flex-row justify-end pt-2">
         <select class="custom float-end " name="countriesFlag" style="width:300px">
            <option class="usa">2023-03-01 2023-03-15</option> 
         </select>
      </div>
   </div>
</div>
</section>  
<section class="w-100 p-4">
 <div id="example_wrapper" class="pt-3 bg-secondery dt-bootstrap5 no-footer">
   <div class="row ps-3 pe-3">
      <div class="col-sm-12 col-md-8 pb-2 ">
	  <label for="" class="d-inline-block">Show </label>
          <div class="form-group ms-2 me-2 position-relative d-inline-block">  
            <select class="form-control form-control-md ps-3 pe-3 mt-2" style="width:80px">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
			<i class="fas fa-angle-down position-absolute end-0 me-3" style="top:20px"></i>
          </div> entries
      </div>
      <div class="col-sm-12 col-md-4 ">

     <div class="form-group has-search ">
       <i class="fa fa-search form-control-feedback"></i>
       <input type="text" class="form-control" placeholder="Search">
     </div>


      </div>
   </div>
   <div class="row dt-row">
      <div class="col-sm-12 ps-4 ">
         <table id="example" class="table table-sm table-border nowrap dataTable no-footer"   aria-describedby="example_info">
            <thead>
               <tr>
                  <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 121.6px;">First name</th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 119.6px;">Last name</th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 284.6px;">Position</th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 150.6px;">Office</th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 58.6px;">Age</th>
               </tr>
            </thead>
            <tbody>
               <tr class="odd">
                  <td class="sorting_1">Ashton</td>
                  <td>Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>  
				 <a href="#" class="btn btn-turtle col-6 col-lg-auto me-2">IP Lookep</a>
				  </td>
               </tr>
               <tr class="even">
                  <td class="sorting_1">Cedric</td>
                  <td>Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td><a href="#" class="btn btn-turtle col-6 col-lg-auto me-2">IP Lookep</a></td>
               </tr>
               <tr class="odd">
                  <td class="sorting_1">Cedric</td>
                  <td>Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td><a href="#" class="btn btn-turtle col-6 col-lg-auto me-2">IP Lookep</a></td>
               </tr>
               <tr class="even">
                  <td class="sorting_1">Cedric</td>
                  <td>Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td><a href="#" class="btn btn-turtle col-6 col-lg-auto me-2">IP Lookep</a></td>
               </tr>
               <tr class="odd">
                  <td class="sorting_1">Cedric</td>
                  <td>Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td><a href="#" class="btn btn-turtle col-6 col-lg-auto me-2">IP Lookep</a></td>
               </tr>
       
            </tbody>
         </table>
      </div>
   </div>
   <div class="row ps-3 pe-3 pb-3">
      <div class="col-sm-12 col-md-5">
        <div class="dataTables_info mt-3" id="example_info" role="status" aria-live="polite">
		<span class="sub-text">Showing 1 to 10 of 12 entries</span>
		 </div>
      </div>
      <div class="col-sm-12 col-md-7 text-end">
         <div class="dataTables_paginate paging_simple_numbers d-flex justify-content-end" id="example_paginate">
            <ul class="pagination me-4 mt-2">
               <li class=" page-item  border previous  " id="example_previous"><a  href="#" tabindex="0" class="page-link">
			   <i class="fas fa-angle-left"></i></a></li> 
               <li class="  border page-item next" id="example_next"><a href="#"   class="page-link"><i class="fas fa-angle-right"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</div>	
</section>

 <!--Main layout-->
 <!--Footer-->
 <?php include_once('template/footer.php'); ?>  