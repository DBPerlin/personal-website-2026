import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { Button } from "@/components/ui/button"

function App() {
  return (
    <>
      <h1>My Portfolio</h1>
      <div className="card">
    <div className="flex min-h-svh flex-col items-center justify-center">
      <Button>Shadcn Button Test</Button>
    </div>
      </div>
    </>
  )
}

export default App
