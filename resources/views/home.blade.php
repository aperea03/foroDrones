@extends('layouts.app')

@section('content')
<div class="container-fluid principal" style="background-image: url({{URL::asset('images/background.jpg')}})">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container">
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi inventore reprehenderit commodi sed! Labore maxime, maiores ratione nemo sit molestias vero alias in. Placeat quidem dignissimos aut, unde nobis, iure labore illum quibusdam repudiandae inventore impedit! Incidunt vel deserunt doloremque excepturi ducimus dignissimos laboriosam ad sapiente debitis architecto omnis non doloribus fugit eum unde dolorem quidem odit consectetur placeat, quod perferendis inventore. Magnam fugit in eos expedita vero, enim similique animi voluptatibus doloremque dolorem quasi quidem exercitationem ea, aspernatur esse ipsa totam libero perferendis reiciendis fugiat quibusdam at laboriosam. Odio iste quae facere nostrum ex magni dolorem neque eaque. Quos error harum aperiam sed cum architecto molestias atque, hic nam ratione distinctio soluta iusto obcaecati iste animi nulla commodi! Soluta dolorum eius impedit facilis enim excepturi sequi, sunt labore harum mollitia, officiis repellat et aliquid in eveniet fugiat. Nostrum, voluptatum? Aut ut alias vero eius est dignissimos, ullam mollitia, explicabo aspernatur, placeat porro impedit quos. Quam, at minus alias possimus excepturi debitis cum tempore, minima dolores fugit culpa pariatur illo mollitia, ducimus commodi consectetur beatae? Ipsa praesentium omnis aperiam delectus dolor debitis et laborum suscipit similique repudiandae perferendis facere vel ratione atque ex nemo molestias, tempora blanditiis enim totam. Asperiores odio fugiat qui possimus non. Vero fugit voluptates dolore laboriosam facere earum nobis. Facere natus explicabo, quam earum odio ex aspernatur culpa voluptatem omnis pariatur, ab quisquam inventore. Minus veritatis odio consequuntur eligendi quod itaque. Libero consectetur fugit natus molestiae consequuntur non in iusto, vitae consequatur, omnis ipsum delectus provident tempora sed dolore doloremque magnam, ullam illo quas quod id voluptates modi sint eveniet? Ipsam molestias, sit praesentium eligendi quisquam id dicta cum dolorum, ab distinctio quam vel dolorem eius eos consectetur tempore. Provident iusto voluptate consequuntur ratione, qui numquam blanditiis commodi ducimus architecto laudantium asperiores suscipit quasi autem fugit explicabo minus quisquam saepe placeat temporibus molestiae reprehenderit ipsam praesentium? Fuga maiores non enim ad ab! Natus sed nihil voluptatum totam unde labore cupiditate ipsam ut accusamus sint, repellendus necessitatibus et magnam eaque itaque, delectus animi molestiae temporibus, illum ex. Vel labore reprehenderit quidem soluta at odio similique voluptatum dolore nostrum corrupti maxime deleniti magni consequatur unde sunt, quasi ipsum, possimus molestias sequi quo autem praesentium in sapiente officiis. Dolor vel fugiat ullam enim pariatur ex eveniet amet dignissimos dolore, sapiente harum quam quidem beatae, iusto totam recusandae quaerat? Fuga neque repudiandae vel sit mollitia, delectus sunt placeat natus laborum distinctio, enim a ipsa omnis adipisci non est eveniet voluptatum ratione nisi odit iste earum rem! Quas vel quam magnam eum! Cupiditate, adipisci a assumenda expedita rerum consectetur? Sit a debitis animi voluptate laudantium vero. Necessitatibus vitae, quis quasi laboriosam ipsa, tempora pariatur odio magnam, fuga sunt ea quidem natus fugit magni obcaecati! Sint reiciendis possimus quis quo! Harum doloribus neque veniam perferendis nisi labore illum autem ipsum vitae ratione repellat a repellendus eveniet ullam commodi suscipit quibusdam, soluta laboriosam hic excepturi voluptatum atque voluptas id molestiae. Quasi iste sed doloribus praesentium laboriosam cumque vel. Aliquam error asperiores praesentium quisquam.</h1>
            @if ($message = Session::get('success'))
            {{-- Arranca el toast al crearse una cuenta --}}
                <script>
                    window.addEventListener('load', function() {
                        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
                        var toastList = toastElList.map(function (toastEl) {
                        return new bootstrap.Toast(toastEl);
                        });
                        toastList.forEach((toast) => toast.show());
                    });
                </script>
                {{-- TOAST --}}
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="{{URL::asset('images/loading.gif')}}" class="rounded me-2" alt="...">
                        <strong class="me-auto">ForoDrones</strong>
                        <small>hace 0 minutos</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ $message }}
                    </div>
                    </div>
                </div>
            @else
                    
            @endif 
            
        </div>    
    </div>
</div>

@endsection