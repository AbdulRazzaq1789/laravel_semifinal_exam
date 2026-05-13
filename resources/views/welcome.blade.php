@extends('layouts.app')

@section('title', 'Students Hub')

@section('content')

    <!-- Messages Panel (right after navbar) -->
    <div class="panel">
        <div class="panel-header">
            Messages
            <button class="panel-action">View All →</button>
        </div>
        <ul class="message-list panel-body no-pad">
            <li class="message-item unread">
                <div class="msg-avatar slate">MC</div>
                <div class="msg-body">
                    <div class="msg-sender">Marcus Chen</div>
                    <div class="msg-preview">Question about assignment 5 – is the deadline extended?</div>
                </div>
                <div class="msg-time">10m ago<span class="unread-badge"></span></div>
            </li>
            <li class="message-item">
                <div class="msg-avatar teal">ET</div>
                <div class="msg-body">
                    <div class="msg-sender">Elena Torres</div>
                    <div class="msg-preview">Thank you for the feedback. I’ll resubmit by Friday.</div>
                </div>
                <div class="msg-time">1h ago</div>
            </li>
            <li class="message-item unread">
                <div class="msg-avatar blue">SP</div>
                <div class="msg-body">
                    <div class="msg-sender">Samir Patel</div>
                    <div class="msg-preview">Could we schedule a quick meeting about the capstone?</div>
                </div>
                <div class="msg-time">2h ago<span class="unread-badge"></span></div>
            </li>
            <li class="message-item">
                <div class="msg-avatar amber">DK</div>
                <div class="msg-body">
                    <div class="msg-sender">David Kim</div>
                    <div class="msg-preview">Lab report uploaded for review – please check.</div>
                </div>
                <div class="msg-time">Yesterday</div>
            </li>
            <li class="message-item">
                <div class="msg-avatar slate">NO</div>
                <div class="msg-body">
                    <div class="msg-sender">Nina Okafor</div>
                    <div class="msg-preview">I’ve been ill, can I get the lecture notes?</div>
                </div>
                <div class="msg-time">2d ago</div>
            </li>
        </ul>
    </div>

    <!-- Stat Cards -->
    <div class="stat-row">
        <div class="stat-card">
            <div class="stat-icon blue">👥</div>
            <div class="stat-info">
                <div class="stat-value">1,248</div>
                <div class="stat-label">Total Students</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon teal">✅</div>
            <div class="stat-info">
                <div class="stat-value">1,102</div>
                <div class="stat-label">Active Enrollment</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon amber">📊</div>
            <div class="stat-info">
                <div class="stat-value">3.42</div>
                <div class="stat-label">Avg GPA</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon rose">📋</div>
            <div class="stat-info">
                <div class="stat-value">38</div>
                <div class="stat-label">Active Courses</div>
            </div>
        </div>
    </div>

    <!-- Two column: Table + Top Performers -->
    <div class="two-col">
        <div class="panel">
            <div class="panel-header">
                Recent Students
                <button class="panel-action">View All →</button>
            </div>
            <div class="panel-body no-pad">
                <table>
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>ID</th>
                            <th>Course</th>
                            <th>Grade</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Marcus Chen</strong></td>
                            <td>STU-1042</td>
                            <td>Computer Science</td>
                            <td><span class="grade-badge grade-a">A</span></td>
                            <td><span class="status-pill status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td><strong>Elena Torres</strong></td>
                            <td>STU-1087</td>
                            <td>Data Analytics</td>
                            <td><span class="grade-badge grade-b">B</span></td>
                            <td><span class="status-pill status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td><strong>Samir Patel</strong></td>
                            <td>STU-0915</td>
                            <td>Engineering</td>
                            <td><span class="grade-badge grade-a">A</span></td>
                            <td><span class="status-pill status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td><strong>Olivia Grant</strong></td>
                            <td>STU-1120</td>
                            <td>Mathematics</td>
                            <td><span class="grade-badge grade-c">C</span></td>
                            <td><span class="status-pill status-pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td><strong>David Kim</strong></td>
                            <td>STU-0976</td>
                            <td>Physics</td>
                            <td><span class="grade-badge grade-b">B</span></td>
                            <td><span class="status-pill status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td><strong>Nina Okafor</strong></td>
                            <td>STU-1201</td>
                            <td>Biology</td>
                            <td><span class="grade-badge grade-d">D</span></td>
                            <td><span class="status-pill status-inactive">Inactive</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel">
            <div class="panel-header">
                Top Performers
                <button class="panel-action">Full List →</button>
            </div>
            <div class="panel-body no-pad" style="padding:0;">
                <div class="message-item" style="border-bottom:1px solid #f7f9fb;">
                    <div class="msg-avatar slate">MC</div>
                    <div class="msg-body">
                        <div class="msg-sender">Marcus Chen</div>
                        <div class="msg-preview">Computer Science · Year 3</div>
                    </div>
                    <div class="msg-time"><strong>4.0</strong> GPA</div>
                </div>
                <div class="message-item" style="border-bottom:1px solid #f7f9fb;">
                    <div class="msg-avatar blue">SP</div>
                    <div class="msg-body">
                        <div class="msg-sender">Samir Patel</div>
                        <div class="msg-preview">Engineering · Year 4</div>
                    </div>
                    <div class="msg-time"><strong>3.95</strong> GPA</div>
                </div>
                <div class="message-item" style="border-bottom:1px solid #f7f9fb;">
                    <div class="msg-avatar teal">ET</div>
                    <div class="msg-body">
                        <div class="msg-sender">Elena Torres</div>
                        <div class="msg-preview">Data Analytics · Year 2</div>
                    </div>
                    <div class="msg-time"><strong>3.87</strong> GPA</div>
                </div>
                <div class="message-item" style="border-bottom:1px solid #f7f9fb;">
                    <div class="msg-avatar amber">DK</div>
                    <div class="msg-body">
                        <div class="msg-sender">David Kim</div>
                        <div class="msg-preview">Physics · Year 3</div>
                    </div>
                    <div class="msg-time"><strong>3.72</strong> GPA</div>
                </div>
                <div class="message-item">
                    <div class="msg-avatar slate">RJ</div>
                    <div class="msg-body">
                        <div class="msg-sender">Ryan Jackson</div>
                        <div class="msg-preview">Chemistry · Year 4</div>
                    </div>
                    <div class="msg-time"><strong>3.68</strong> GPA</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Enrollment Summary -->
    <div class="panel">
        <div class="panel-header">
            Course Enrollment Summary
            <button class="panel-action">Export →</button>
        </div>
        <div class="panel-body no-pad">
            <table>
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Instructor</th>
                        <th>Enrolled</th>
                        <th>Capacity</th>
                        <th>Fill Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>CS-301</strong></td>
                        <td>Advanced Algorithms</td>
                        <td>Dr. Reynolds</td>
                        <td>84</td>
                        <td>90</td>
                        <td>93%</td>
                    </tr>
                    <tr>
                        <td><strong>DA-210</strong></td>
                        <td>Statistical Modeling</td>
                        <td>Prof. Hayes</td>
                        <td>62</td>
                        <td>75</td>
                        <td>83%</td>
                    </tr>
                    <tr>
                        <td><strong>EN-440</strong></td>
                        <td>Structural Analysis</td>
                        <td>Dr. Morgan</td>
                        <td>45</td>
                        <td>50</td>
                        <td>90%</td>
                    </tr>
                    <tr>
                        <td><strong>MA-250</strong></td>
                        <td>Linear Algebra</td>
                        <td>Prof. Gupta</td>
                        <td>110</td>
                        <td>120</td>
                        <td>92%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
