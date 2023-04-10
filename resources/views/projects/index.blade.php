@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projects</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" href="{{ route('projects.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
        <!-- Search Field -->
        <div class="form-group col-sm-6 mt-2">
            {!! Form::text('search', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card" id="table-container">
            @include('projects.table')
        </div>
    </div>
@endsection

@push('page_scripts')
    <script>
        const tableContainer = $('#table-container')
        var searchQuery = ''

        const search = (query = '', page = 1) => {
            $.ajax('{{ route('projects.index') }}', {
                data: {
                    query: query,
                    page: page
                },
                success: (data) => updateTable(data)
            })
            history.pushState(null, null, '?query=' + query + '&page=' + page)
        }

        const updateTable = (html) => {
            tableContainer.html(html)
            updatePaginationLinks()
        }

        $('[name="search"]').on('input', function() {
            searchQuery = $(this).val()
            search(searchQuery)
        })

        const updatePaginationLinks = () => {
            $('a.page-link').each(function() {
                page_link = $(this)
                console.log(page_link)
                page_number = page_link.attr('href').match(/page=(\d+)/)[1]
                page_link.attr('page-number', page_number)
                page_link.attr('href', null)
                page_link.on('click', function() {
                    pageNumber = $(this).attr('page-number')
                    search(searchQuery, pageNumber)
                })
            })
        }

        updatePaginationLinks()

    </script>
@endpush
