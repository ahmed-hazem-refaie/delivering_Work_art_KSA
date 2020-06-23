<div class="table-responsive">
    <table class="table table-striped" id="reviews-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Title</th>
        <th>Body</th>
        <th>Rate</th>
        <th>Like Counter</th>
        <th>Dislike Counter</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td>{{ $review->name }}</td>
            <td>{{ $review->email }}</td>
            <td>{{ $review->title }}</td>
            <td>{{ $review->body }}</td>
            <td>{{ $review->rate }}</td>
            <td>{{ $review->like_counter }}</td>
            <td>{{ $review->dislike_counter }}</td>
                <td>
                    {!! Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reviews.show', [$review->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('reviews.edit', [$review->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
