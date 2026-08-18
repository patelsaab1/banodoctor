
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $(".add-row").click(function () {
                var question = $("#question").val();
                var answer = $("#answer").val();
                var markup = "<tr><td> <input type='checkbox' name='record'> Question - <input type='text' class='form-control' name='questions[]' value='" + question + "'><br> Answer - <textarea class='form-control' name='answer[]' >" + answer + "</textarea></td></tr>";
                $("table tbody").append(markup);


            });

            // Find and remove selected table rows
            $(".delete-row").click(function () {
                $("table tbody").find('input[name="record"]').each(function () {
                    if ($(this).is(":checked")) {
                        $(this).parents("tr").remove();
                    }
                });
            });
        });    
    </script>

    <div class="form-group">
        <input type="text" id="question" class="form-control" placeholder="Enter Question Here">
        <textarea type="text" id="answer" class="form-control" placeholder="Enter FAQ Answer Here"></textarea>
    </div>

    <div class="text-start m-3">
        <input type="button" class="btn btn-primary add-row" value="Add FAQ'S">
    </div>



    <form action="" method="post">
        @csrf

        <table>

            <tbody>

            </tbody>
        </table>
        
        
        <button type="button" class="btn btn-success delete-row">Delete Row</button>

    </form>