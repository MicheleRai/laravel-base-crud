<div class="overlay d-none">
    <form action="link al delete" class="delete-confirmation" method="POST">
        @method('DELETE')
        @csrf
        <h2>Sei sicuro di volerlo eliminare?</h2>
        <button type="button" class="btn btn-warning btn-close-me">NO</button>
        <button class="btn btn-danger btn-delete">SI</button>
    </form>
</div>

