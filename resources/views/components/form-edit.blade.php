   <form action="">

        <div class="input">
            <label>Name</label>
            <input type="text" name="name" value="{{ $student['name'] }}">
        </div>

        <div class="input">
            <label>Email</label>
            <input type="email" name="email" value="{{ $student['email'] }}">
        </div>

        <div class="input">
            <label>Course</label>
            <input type="text" name="course" value="{{ $student['course'] }}">
        </div>

        <div class="input">
            <label>Year</label>
            <input type="text" name="year" value="{{ $student['year'] }}">
        </div>

    </form>
