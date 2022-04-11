
<x-components>
    <div>
        <div>
            <p>Tengo una nota no la toca ni beethoven<p>
        </div>

        @foreach($arrteachers as $teacher)
            <div>
                {{ $loop->index }} - {{$teacher['teaFirstName']}} - {{$teacher['teaLastName']}}                 
            </div>
        @endforeach
        @foreach($arrteachers as $teacher)
            <div>
                {{ $teacher['teaOrigin'] }}
            </div>
        @endforeach
        @foreach($arrSections as $section)
            <div>
                {{ $section['secName'] }}
            </div>
        @endforeach
        <div>
            <p>Teacher of the year:<p>
        </div>
        @foreach($arrTeacher as $info)
        </div>
            <p>{{ $info['teaFirstName'] }}</p>    
        <div>
        @endforeach
        <div>
        <img src="{{ asset ('images/le-beau-temple-thai.jpg') }}" alt="la belle thailande">
        </div>
    </div>
</x-components>