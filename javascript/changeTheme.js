/**
 * Change the main F1 color dynamically
 * @param {string} color - The new color to set (hex, rgb, or CSS color)
 */
function setF1MainColor(color) {
    document.documentElement.style.setProperty('--main-color', color);
}