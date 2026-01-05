{{--Mail page --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Job Posted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            color: #333333;
        }
        .content {
            line-height: 1.6;
            color: #555555;
        }
        .content h2 {
            color: #333333;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>
<body>
    <div class="container mt-6">
        <div class="header">
            <h1>New Job Posted: {{ $job->title }}</h1>
        </div>
        <div class="content">
            <h2>Job Details</h2>
            <p><strong>Title:</strong> {{ $job->content}}</p>
            <p>Click the link below to view the job posting:</p>
            <p><a href="{{ url("/jobs/" . $job->id)}}">View Job Posting</a></p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} info@talyx. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
