# Sun Doviz System Patterns

## Page Structure

### Layout Components
1. Header Section
   - Language selector (TR/EN)
   - Logo container
   - Responsive positioning

2. Main Content
   - Two-column layout
   - Responsive stacking
   - Animation sequences

3. Exchange Rate Display
   - Table container
   - Header with icons
   - Zebra striping
   - Timestamp display

4. Contact Section
   - Call button
   - WhatsApp integration
   - Icon integration

### Design Patterns

#### Responsive Design
1. Mobile-First Approach
   - Full-width containers
   - Stacked layout
   - Optimized spacing

2. Desktop Adaptations
   - Two-column layout
   - Adjusted proportions
   - Enhanced spacing

#### Visual Hierarchy
1. Information Layers
   - Primary: Exchange rates
   - Secondary: Contact buttons
   - Tertiary: Timestamps

2. Visual Elements
   - Custom gradient background
   - Backdrop blur effects
   - Border treatments
   - Icon system

#### Animation System
1. Page Load Sequence
   - Fade-in animations
   - Slide-up effects
   - Delayed triggers

2. Interactive Elements
   - Hover states
   - Focus indicators
   - Transition effects

### Theme System
1. Light Mode
   - White background with bronze accents
   - Light gold highlights
   - System preference detection

2. Dark Mode
   - Bronze background with gold accents
   - Dark mode optimized colors
   - Automatic switching

### Multilingual System
1. Translation Structure
   - External translations.js file
   - Language object pattern
   - Standardized string keys
   - 20+ language support

2. Language Detection
   - Browser language detection
   - User preference persistence
   - Fallback patterns
   - TR/EN toggle interface

3. Text Rendering
   - Dynamic content updates
   - Element targeting
   - Preserve HTML structure
   - Error handling

### Data Management
1. API Integration
   - PHP proxy implementation
   - Error handling
   - Response formatting
   - Rate parsing

2. Caching Strategy
   - LocalStorage implementation
   - Cache expiration logic
   - Fallback to cached data
   - Background refresh

3. State Management
   - Language preference storage
   - Theme detection
   - Timestamp tracking
   - Loading states 