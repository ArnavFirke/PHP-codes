Dear {{$data->task_owner}}<br><br>

The task {{$data->task_description}},<br><br>
{{$data->task_eta==0? "has been added for you" :"has been marked as completed"}} <br>
<br>
@if($data->task_eta==0)
Kindly complete it within {{$data->task_eta}} <br><br>
@endif

Thank you