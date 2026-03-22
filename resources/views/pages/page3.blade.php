@extends('layouts.app')

@section('content')
    <div class="page-container">
        <h1>Compose Email</h1>

        <div class="card compose-card">
            <form class="compose-form" id="emailForm">
                <div class="form-group">
                    <label for="from">From:</label>
                    <input 
                        type="email" 
                        id="from" 
                        name="from"
                        placeholder="sender@example.com"
                        class="form-control"
                        required
                    />
                </div>

                <div class="form-group">
                    <label for="to">To:</label>
                    <input 
                        type="email" 
                        id="to" 
                        name="to"
                        placeholder="recipient@example.com"
                        class="form-control email-input"
                        autocomplete="off"
                        required
                    />
                </div>

                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input 
                        type="text" 
                        id="subject" 
                        name="subject"
                        placeholder="Subject"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <label for="body">Message:</label>
                    <textarea 
                        id="body" 
                        name="body"
                        placeholder="Compose your message..."
                        class="form-control message-body"
                        rows="15"
                    ></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-secondary">Discard</button>
                </div>
            </form>
        </div>
    </div>
@endsection