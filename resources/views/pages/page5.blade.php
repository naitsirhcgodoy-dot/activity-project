@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="page-container">

        <!-- Header -->
        <div class="mb-10">
            <h1 class="text-4xl font-bold text-gray-900">Settings</h1>
            <p class="mt-2 text-gray-600">Manage your application preferences and account settings</p>
        </div>

        <!-- Account Section -->
        <h2>Account</h2>
        <div class="settings-grid mb-10">
            <div class="settings-card">
                <h3>Profile Info</h3>
                <p>Update your name, email, and profile picture</p>
                <a href="#" class="btn">Edit Profile</a>
            </div>
            <div class="settings-card">
                <h3>Two-Factor Authentication</h3>
                <p>Add extra security to your account</p>
                <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>
            <div class="settings-card">
                <h3>Change Password</h3>
                <p>Update your account password</p>
                <a href="#" class="btn">Change Password</a>
            </div>
        </div>

        <hr>

        <!-- Notifications Section -->
        <h2>Notifications</h2>
        <div class="settings-grid mb-10">
            <div class="settings-card">
                <h3>Enable Notifications</h3>
                <p>Receive alerts and updates</p>
                <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>
            <div class="settings-card">
                <h3>Enable Sound</h3>
                <p>Play sounds with notifications</p>
                <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>
            <div class="settings-card">
                <h3>Email Notifications</h3>
                <p>Receive notifications via email</p>
                <label class="toggle-switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>

        <hr>

        <!-- Privacy Section -->
        <h2>Privacy</h2>
        <div class="settings-grid mb-10">
            <div class="settings-card">
                <h3>Activity History</h3>
                <p>Manage what activity is saved</p>
                <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>
            <div class="settings-card">
                <h3>Connected Apps</h3>
                <p>Control app access to your data</p>
                <a href="#" class="btn">Manage Apps</a>
            </div>
        </div>

        <hr>

        <!-- Appearance Section -->
        <h2>Appearance</h2>
        <div class="settings-grid mb-10">
            <div class="settings-card">
                <h3>Dark Mode</h3>
                <p>Switch between light and dark themes</p>
                <label class="toggle-switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
            <div class="settings-card">
                <h3>Font Size</h3>
                <p>Adjust text size for readability</p>
                <select>
                    <option>Small</option>
                    <option selected>Medium</option>
                    <option>Large</option>
                </select>
            </div>
        </div>

        <hr>

        <!-- Language & Region Section -->
        <h2>Language & Region</h2>
        <div class="settings-grid mb-10">
            <div class="settings-card">
                <h3>Language</h3>
                <p>Select your preferred language</p>
                <select>
                    <option>English</option>
                    <option>Spanish</option>
                    <option>French</option>
                </select>
            </div>
            <div class="settings-card">
                <h3>Time Zone</h3>
                <p>Select your time zone</p>
                <select>
                    <option>GMT+0</option>
                    <option>GMT+8 (Philippines)</option>
                    <option>GMT-5</option>
                </select>
            </div>
        </div>

    </div>
</div>
@endsection