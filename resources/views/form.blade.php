@extends('layouts.defalut')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header container-sm">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title">แบบสำรวจข้อมูล</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ</label>
                    <input type="text" class="form-control" id="" placeholder="อาทิตย์">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">นามสกุล</label>
                    <input type="text" class="form-control" id="" placeholder="อนันตสุข">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">วันเดือนปีเกิด</label>
                    <input type="date" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">เพศ</label><br>
                    <input type="checkbox" id="exampleInputEmail1">
                    <label for="">ชาย</label>&#160;&#160;&#160;&#160;
                    <input type="checkbox" id="exampleInputEmail1">
                    <label for="">หญิง</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">รูป</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">เลือกรูป</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">อัปโหลด</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-floating">
                    <label for="floatingTextarea2">ที่อยู่</label>
                    <textarea class="form-control" placeholder="กรุณาใส่ที่อยู่...." id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
                <br>
                <div class="dropdown">
                    <select id="color" onchange="changeColor()" class="btn btn-secondary" aria-labelledby="dropdownMenuButton1">
                        <option class="dropdown-item" selected disabled hidden >สีที่ชอบ</option>
                        <option class="dropdown-item" value = "red" href="#">แดง</option>
                        <option class="dropdown-item" value = "green" href="#">เขียว</option>
                        <option class="dropdown-item" value = "yellow" href="#">เหลือง</option>
                    </select>
                </div>
                <div class="form-group">
                    <br>
                    <label for="exampleInputEmail1">แนวเพลงที่ชอบ</label><br>
                    <input type="checkbox" id="exampleInputEmail1">
                    <label for="">เพื่อชีวิต</label> &#160; &#160; &#160; &#160;
                    <input type="checkbox" id="exampleInputEmail1">
                    <label for="">ลุกทุ่ง</label> &#160; &#160; &#160; &#160;
                    <input type="checkbox" id="exampleInputEmail1">
                    <label for="">อื่นๆ</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                </div>
            </div>
            <!-- /.card-body -->
            <div class=" d-flex justify-content-between">
                <div class="card-footer bg-white">
                    <button type="submit" class="btn btn-dark">Reset </button>
                </div>
                <div class="card-footer  bg-white">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>
</div>
<script>
    const changeColor=()=>{
        let dom = document.getElementById("color").value
        console.log(dom);
        if(dom==="red"){
            document.getElementById("color").className = "btn btn-danger"
        }
        if(dom==="green"){
            document.getElementById("color").className = "btn btn-success"
        }
        if(dom==="yellow"){
            document.getElementById("color").className = "btn btn-warning"
        }
    }
</script>
@endsection