<div class="row">
    <div class="form-group col-lg-6">
        <label class="control-label">{{ 'ID' }}</label>
        <input class="form-control form-control-sm" name="id" type="id" value="{{ isset($staff->id) ? $staff->id : ''}}" >     
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Name' }}</label>
        <input class="form-control form-control-sm" name="name" type="text" value="{{ isset($staff->Name) ? $staff->Name : ''}}" > 
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Age' }}</label>
        <input class="form-control form-control-sm" name="age" type="number" value="{{ isset($staff->Age) ? $staff->Age : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Salary' }}</label>
        <input class="form-control form-control-sm" name="salary" type="number" value="{{ isset($staff->Salary) ? $staff->Salary : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Phone' }}</label>
        <input class="form-control form-control-sm" name="phone" type="number" value="{{ isset($staff->Phone) ? $staff->Phone : ''}}" >    
    </div>
</div>