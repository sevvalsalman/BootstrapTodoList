<!DOCTYPE html>
<html>
    <head>
        <title>BOOTSRAPLİST</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">

                  <div class="card">
                    <div class="card-body p-5">

                      <div class="d-flex justify-content-center align-items-center mb-4">
                        <div class="form-outline flex-fill">


                            <div class="text-center pt-3 pb-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                                  alt="Check" width="30">
                                  <form action="{{ route('store') }}" method="POST">
                                    @csrf
                                <h3 class="my-4">TO DO LİST</h3>
                              </div>
                          <input type="text" id="form2" name="text"  placeholder="what will i do today" class="form-control" />

                        </div>
                    <button type="submit" class="btn btn-info ms-2"  style="margin-left: 5px; border-radius:20px; margin-top:130px; font-size:20px; padding-top:2px;"><b>+</b></button>
                      </form>
                    </div>


                      <!-- Tabs content -->
                      <div class="tab-content" id="ex1-content">
                        <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                          aria-labelledby="ex1-tab-1">

                          <table class="table">
                              <thead>
                                <tr>
                                    <th scope="col">Sıra</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Things to do</th>
                                    <th scope="col">Transactions</th>
                                </tr>
                              </thead>
                            <tbody>
                                @foreach($todos as $i=>$todo)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <th scope="row">{{ $todo->id }}</th>
                                    <td>{{ $todo->baslik }}</td>
                                    <td>
                                        <a href="{{route('destroy',$todo->id)}}" class="btn btn-danger btn-sm" title="Delete " onclick="return confirm("Confirm delete?")">DELETE</button>
                                        <a href="{{ route('edit',$todo->id) }}" class="btn btn-primary btn-sm" title="Edit " style="margin-left: 3px;">EDİT</a>
                                    </td>
                                  </tr>
                                  @endforeach
                            </tbody>



                          </table>






                            <div class="form-check">


                        </div>

                        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                          <ul class="list-group mb-0">
                            <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                              style="background-color: #f4f6f7;">
                              <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                              Morbi leo risus
                            </li>
                            <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                              style="background-color: #f4f6f7;">
                              <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                              Porta ac consectetur ac
                            </li>
                            <li class="list-group-item d-flex align-items-center border-0 mb-0 rounded"
                              style="background-color: #f4f6f7;">
                              <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                              Vestibulum at eros
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                          <ul class="list-group mb-0">
                            <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                              style="background-color: #f4f6f7;">
                              <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                              <s>Cras justo odio</s>
                            </li>
                            <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                              style="background-color: #f4f6f7;">
                              <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                              <s>Dapibus ac facilisis in</s>
                            </li>
                          </ul>
                        </div>
                      </div>


                      <!-- Tabs content -->

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>










    </body>
</html>
