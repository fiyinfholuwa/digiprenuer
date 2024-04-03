@extends('admin.app.app')
@section('content')
    <style>
        .infobox-3{
            padding: 25px 25px 25px 25px !important;
            margin-top: 0px !important;
        }
    </style>



        <div class="row" style="margin:100px 20px">
                <div class="col-md-4">
                    <div class="">
                        <div class="">
                            <div class="card-title"><h5>Edit Task</h5></div>
                        </div>

                           <form action="{{route('task.update', $task->id)}}" method="post">
                               @csrf
                           <div class="form-group">

                                <input type="text" class="form-control" id="email2" value="{{$task->name}}"  name="name" placeholder="Enter Task Name">
                                <small style="color:red; font-weight:500">
                                @error('name')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary">Update Task</button>

                        </div>
                           </form>


                </div>

                <div class="col-md-8">
                <div class="row">
						<div class="col-md-12">
							<div class="">
								<div class="">
									<h5 class="card-title" style="margin-left: 30px">All Tasks</h5>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <td>S/N</td>
													<th>Name</th>
													<th>Action</th>
												</tr>
											</thead>

                                            <tbody>
                                            <?php $i = 1; ?>

                                            @foreach($tasks as $task)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$task->name}}</td>

                                                    <td>
                                                        <a href="{{route('task.edit', $task->id)}}" ><i style="color:blue;" class="fa fa-edit"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#task_{{$task->id}}" ><i style="color:red;" class="fa fa-trash"></i></a>
                                                    </td>

                                                </tr>
                                                @include('admin.modal.task_delete')
                                            @endforeach

                                            </tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>

                </div>
            </div>


@endsection
