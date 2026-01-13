<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 40px 20px;
            margin: 0;
            line-height: 1.6;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }
        .email-header {
            background: #1e293b;
            color: #ffffff;
            padding: 40px 30px;
            text-align: center;
        }
        .header-icon {
            width: 64px;
            height: 64px;
            background: #3b82f6;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .header-icon svg {
            width: 32px;
            height: 32px;
            color: #ffffff;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
        }
        .email-header p {
            margin: 8px 0 0;
            font-size: 14px;
            color: #94a3b8;
        }
        .email-body {
            padding: 40px 30px;
        }
        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            background: #dbeafe;
            color: #1e40af;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 24px;
        }
        .info-grid {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 0;
            margin-bottom: 24px;
        }
        .info-row {
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: flex-start;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-icon {
            width: 40px;
            height: 40px;
            background: #f1f5f9;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-right: 16px;
        }
        .info-icon svg {
            width: 20px;
            height: 20px;
            color: #64748b;
        }
        .info-content {
            flex: 1;
        }
        .info-label {
            font-size: 12px;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .info-value {
            font-size: 15px;
            color: #1e293b;
            font-weight: 500;
            word-break: break-word;
        }
        .info-value a {
            color: #3b82f6;
            text-decoration: none;
        }
        .info-value a:hover {
            text-decoration: underline;
        }
        .message-section {
            margin: 24px 0;
        }
        .message-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin-top: 8px;
        }
        .message-box .info-label {
            margin-bottom: 12px;
        }
        .message-text {
            font-size: 14px;
            line-height: 1.6;
            color: #475569;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .divider {
            height: 1px;
            background: #e2e8f0;
            margin: 32px 0;
        }
        .action-section {
            text-align: center;
            margin: 32px 0;
        }
        .action-text {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 16px;
        }
        .action-button {
            display: inline-block;
            padding: 14px 32px;
            background: #3b82f6;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.2s ease;
        }
        .action-button:hover {
            background: #2563eb;
        }
        .meta-info {
            background: #f8fafc;
            border-radius: 8px;
            padding: 16px 20px;
            margin-top: 24px;
        }
        .meta-row {
            font-size: 13px;
            color: #64748b;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        .meta-row:last-child {
            margin-bottom: 0;
        }
        .meta-row svg {
            width: 16px;
            height: 16px;
            margin-right: 8px;
            color: #94a3b8;
            flex-shrink: 0;
        }
        .email-footer {
            background: #1e293b;
            padding: 32px 30px;
            text-align: center;
        }
        .footer-brand {
            font-size: 20px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 12px;
        }
        .footer-text {
            font-size: 13px;
            color: #94a3b8;
            margin: 8px 0;
        }
        .footer-copyright {
            font-size: 12px;
            color: #64748b;
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid #334155;
        }
        @media only screen and (max-width: 600px) {
            body {
                padding: 0;
            }
            .email-container {
                border-radius: 0;
            }
            .email-header,
            .email-body,
            .email-footer {
                padding: 30px 20px;
            }
            .info-row {
                padding: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <div class="header-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h1>New Contact Message</h1>
            <p>Someone reached out through your contact form</p>
        </div>

        <!-- Body -->
        <div class="email-body">
            <div class="status-badge">
                📩 New Message
            </div>

            <!-- Contact Information -->
            <div class="info-grid">
                <div class="info-row">
                    <div class="info-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Full Name</div>
                        <div class="info-value">{{ $contact->name }}</div>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Email Address</div>
                        <div class="info-value">
                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                        </div>
                    </div>
                </div>

                @if($contact->phone)
                <div class="info-row">
                    <div class="info-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Phone Number</div>
                        <div class="info-value">
                            <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                        </div>
                    </div>
                </div>
                @endif

                @if($contact->subject)
                <div class="info-row">
                    <div class="info-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Subject</div>
                        <div class="info-value">{{ $contact->subject }}</div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Message -->
            <div class="message-section">
                <div class="message-box">
                    <div class="info-label">Message Content</div>
                    <div class="message-text">{{ $contact->message }}</div>
                </div>
            </div>

            <div class="divider"></div>

            <!-- Call to Action -->
            <div class="action-section">
                <p class="action-text">
                    <strong>Respond promptly for better customer satisfaction</strong>
                </p>
                <a href="mailto:{{ $contact->email }}" class="action-button">
                    Reply to Customer
                </a>
            </div>

            <!-- Metadata -->
            <div class="meta-info">
                <div class="meta-row">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span><strong>Received:</strong> {{ $contact->created_at->format('F d, Y \a\t h:i A') }}</span>
                </div>
                <div class="meta-row">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <span><strong>IP:</strong> {{ request()->ip() ?? 'N/A' }}</span>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <div class="footer-brand">TECHONIKA</div>
            <p class="footer-text">
                This is an automated notification from your contact form.
            </p>
            <p class="footer-copyright">
                © {{ date('Y') }} Techonika. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
