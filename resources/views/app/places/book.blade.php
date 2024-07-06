@php
    $id = 'places.book';
    $title = 'Book | Places';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50"
        style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Book a Place</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Places</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">{{ $place->title ?? 'N/A' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>



    <section class="space-ptb">
        <div class="container">
            <div class="row d-flex align-items-center mb-lg-5 mb-4">
                <div class="col-12 table-responsive">
                    <table class="compact-table table-hover table-bordered">
                        <thead class="compact-thead-dark">
                            <tr>
                                <th>Day</th>
                                <!-- Generating table headers for 24 hours -->
                                <script>
                                    for (let i = 0; i < 24; i++) {
                                        document.write(`<th class="text-center">${i % 12 || 12} ${i < 12 ? 'AM' : 'PM'}</th>`);
                                    }
                                </script>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Generating rows for each day -->
                            <script>
                                const days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
                                for (let day of days) {
                                    document.write(`<tr class="text-left"><td>${day}</td>`);
                                    for (let i = 0; i < 24; i++) {
                                        document.write(`<td></td>`);
                                    }
                                    document.write(`</tr>`);
                                }
                            </script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            function showAlert(timeRange) {
                alert(`You clicked on the event: ${timeRange}`);
            }

            function addEvent(day, startHour, duration) {
                const cells = document.querySelectorAll('td');
                const dayIndex = days.indexOf(day) + 1;
                const startIndex = dayIndex * 25 + startHour + 1;
                const endHour = startHour + duration - 1;

                for (let i = 0; i < duration; i++) {
                    cells[startIndex + i].classList.add('bg-book');
                    cells[startIndex + i].setAttribute('data-event', `${day} ${startHour}:00 - ${endHour}:00`);
                }
            }

            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('bg-book')) {
                    showAlert(event.target.getAttribute('data-event'));
                }
            });

            addEvent("Monday", 2, 4);
            addEvent("Wednesday", 10, 4);
        </script>
    @endpush
@endsection
